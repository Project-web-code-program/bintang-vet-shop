const loginApp = new Vue({
  el: '#login-app',
	data: {
    form: {
      username: '',
      password: ''
    },
    message: '',
    usernameError: false,
    passwordError: false,
    showAlert: false,
    isSuccess: false,
    baseUrl: ''
  },
  mounted() { },
  computed: {
    disableSubmit: function() {
      return this.usernameError || this.passwordError;
    }
  },
	methods: {
    usernameKeyup: function(event) {
      const value = event.target.value;
      this.usernameError = !value ? true : false;
      this.passwordError = !this.form.password ? true : false;
    },
    passwordKeyup: function(event) {
      const value = event.target.value;
      this.passwordError = !value ? true : false;
      this.usernameError = !this.form.username ? true : false;
    },
		onSubmit: function() {
      const formData = {
        'username': this.form.username,
        'password': this.form.password
      }

      this.message = '';
      if (formData.username && formData.password) {
        axios.post(this.$refs.baseUrl.value + '/api/login', formData, { headers: { "Content-Type": "application/json" } })
        .then(resp => {
          this.showAlert = true; this.isSuccess = true;
          this.message = 'Login Success';
          this.form.username = ''; this.form.password = '';
          const getDataLogin = resp.data;

          localStorage.setItem('vet-clinic', JSON.stringify({
            fullname: getDataLogin.fullname,
            username: getDataLogin.username,
            email: getDataLogin.email,
            role: getDataLogin.role,
            token: getDataLogin.token,
            user_id: getDataLogin.user_id
          }));
        })
        .catch(err => {
          err.response.data.errors.forEach((element, idx) => {
            const msg = (idx !== 0 ) ? element + '<br>' : element;
            this.message += msg;
          });

          this.showAlert = true; this.isSuccess = false;
        })
        .finally(() => {
          setTimeout(() => {
            if (this.isSuccess) { 
              this.showAlert = false;
              location.href = this.$refs.baseUrl.value + '/'; 
            }
          }, 2000);
        });
      }
		}
	},
});