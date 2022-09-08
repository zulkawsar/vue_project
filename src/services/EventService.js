import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'https://jsonplaceholder.typicode.com',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-type': 'application/json',
    },
});

export default {
    getEvents(limit, page) {
        return apiClient.get('/posts/?' + '_limit=' + limit + '&_page=' + page);
    },
    getEvent(id) {
        return apiClient.get('/posts/' + id);
    },
};
