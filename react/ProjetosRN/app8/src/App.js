import React, { Component } from 'react';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import firebase from 'firebase';
import ReduxThunk from 'redux-thunk';

import Routes from './Routes';
import reducers from './reducers';

class App extends Component {

    componentWillMount() {

        firebase.initializeApp({
            apiKey: "AIzaSyBculh7GkuENLT5R5IJGIxJAI_XYggDRoI",
            authDomain: "whatsapp-clone-45793.firebaseapp.com",
            databaseURL: "https://whatsapp-clone-45793.firebaseio.com",
            projectId: "whatsapp-clone-45793",
            storageBucket: "whatsapp-clone-45793.appspot.com",
            messagingSenderId: "675139121181"
        });
    }

    render() {
        return (
            <Provider store={createStore(reducers, {}, applyMiddleware(ReduxThunk))}>
                <Routes />
            </Provider>
        );
    }
}

export default App;
