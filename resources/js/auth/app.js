new Vue({
    el: "#app",
    created: function () {
    },
    data: {
        userType: 'Administrativos',
        hasError: false,
        IsLoading: false
    },
    methods: {
        logIn: function () {
            this.hasError = !this.hasError;
            //console.log(this.hasError);
            this.IsLoading = !this.IsLoading;
            setTimeout(() => this.IsLoading = !this.IsLoading, 3000);
        }
    }
});

const forgot = new Vue({
    el: "#forgot",
    data:{
        send:false
    },
    methods:{
        resetPass: function () {
            $('button[type="submit"]').button('loading');
            setTimeout(() => {$('button[type="submit"]').button('reset'); this.send = !this.send;},5000);
            //console.log(this.send);
        }
    }
});
