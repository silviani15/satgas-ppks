// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.
importScripts(
    "https://www.gstatic.com/firebasejs/9.2.0/firebase-app-compat.js"
);
importScripts(
    "https://www.gstatic.com/firebasejs/9.2.0/firebase-messaging-compat.js"
);

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
firebase.initializeApp({
    apiKey: "AIzaSyBadecmC0-Tt20KAASzKPyY-TefNUIM1Wk",
    authDomain: "skripsihappy-91b5e.firebaseapp.com",
    projectId: "skripsihappy-91b5e",
    storageBucket: "skripsihappy-91b5e.appspot.com",
    messagingSenderId: "837657119007",
    appId: "1:837657119007:web:53772582e1e577d85d482a",
    measurementId: "G-XR3QF0KCYG",
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

// If you would like to customize notifications that are received in the
// background (Web app is closed or not in browser focus) then you should
// implement this optional method.
// Keep in mind that FCM will still show notification messages automatically
// and you should use data messages for custom notifications.
// For more info see:
// https://firebase.google.com/docs/cloud-messaging/concept-options
messaging.onBackgroundMessage(function (payload) {
    const notificationTitle = payload.notification.title || "Default Title";
    const notificationOptions = {
        body: payload.notification.body || "Default Body",
        icon: "/img/logoppks.png",
    };
    self.registration.showNotification(notificationTitle, notificationOptions);
});
