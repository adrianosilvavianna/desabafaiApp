import Token from './Token';
import AppStorage from './AppStorage';

class User{

    login(data) {
        axios.post('/api/auth/login', data)
            .then(res => {
                this.responseAfterLogin(res)
            })
            .catch(error => console.log(error.response.data))
    }

    responseAfterLogin(res){
        const access_token = res.data.access_token;
        const userName = res.data.user;
        console.log(access_token);

        if(Token.isValid(access_token)){
            AppStorage.store(userName, access_token);
        }
    }

    hasToken(){
        const storedToken = AppStorage.getToken();

        if(storedToken){
            return Token.isValid(storedToken);
        }

        return false;
    }

    loggedIn(){
        return this.hasToken();
    }

    logout(){
        AppStorage.clear();
    }

    getName(){
        if(this.loggedIn()){
            return AppStorage.getUser()
        }
    }

    getId(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub
        }
        return false;
    }

}

export default User = new User();