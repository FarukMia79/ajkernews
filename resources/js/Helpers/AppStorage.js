class AppStorage {
    StoreToken(token) {
        localStorage.setItem('token', token);
    }
    
    StoreUser(user) {
        localStorage.setItem('user', JSON.stringify(user));
    }
    
    Store(token, user) {
        this.StoreToken(token);
        this.StoreUser(user);
    }
    
    Clear() {
        localStorage.removeItem('token');
        localStorage.removeItem('user');
    }
    
    GetToken() {
        return localStorage.getItem('token');
    }
    
    GetUser() {
        const user = localStorage.getItem('user');
        return user ? JSON.parse(user) : null;
    }
}
export default AppStorage;