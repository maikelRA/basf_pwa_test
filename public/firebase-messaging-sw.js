importScripts("https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/8.2.5/firebase-messaging.js");

let config = {
    apiKey: "AIzaSyApqRVUKCtgtRl-nVO5YCrlJzmKMkiAs9Y",
    authDomain: "basfpwa.firebaseapp.com",
    projectId: "basfpwa",
    storageBucket: "basfpwa.appspot.com",
    messagingSenderId: "686768559095",
    appId: "1:686768559095:web:1028c1abc402a15d8514f2",
    measurementId: "G-F65NPLN7J3",
};

// // init FCM
// const initFCM = async messaging => {
//     try {
//         const permission = await Notification.requestPermission()
//         permission === 'granted' ? console.log(messaging) : console.log('Failed!')
//         // console.log("Successful")
//     } catch (error) {
//         console.log('Error', error)
//     }
// }
//
// //use on load
// document.addEventListener('DOMContentLoaded', () => {
//     const messaging = firebase.messaging()
//     messaging.usePublicVapidKey('GET_THIS_FROM_FIREBASE_CONSOLE')
//     initFCM(messaging)
// })



firebase.initializeApp(config);
const messaging = firebase.messaging();


messaging.setBackgroundMessageHandler(function (payload) {
    console.log(' Received background message ', payload);
    let title = 'Recipe PWA',
        options = {
            body: "New Recipe Alert",
            icon: "https://raw.githubusercontent.com/idoqo/laravel-vue-recipe-pwa/master/public/recipe-book.png"
        };
    return self.registration.showNotification(
        title,
        options
    );
});


