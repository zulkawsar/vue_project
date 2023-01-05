import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://127.0.0.1:8000/api',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-type': 'application/json',
    },
});


export default {
    getProducts(){
        return apiClient.get('?product');
    },
    
    getCategories(){
        return apiClient.get('/categories');
    }
}