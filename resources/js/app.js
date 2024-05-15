import "./bootstrap";

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// import { getAnalytics } from "firebase/analytics";
import { getMessaging, getToken, onMessage } from "firebase/messaging";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyBadecmC0-Tt20KAASzKPyY-TefNUIM1Wk",
    authDomain: "skripsihappy-91b5e.firebaseapp.com",
    projectId: "skripsihappy-91b5e",
    storageBucket: "skripsihappy-91b5e.appspot.com",
    messagingSenderId: "837657119007",
    appId: "1:837657119007:web:53772582e1e577d85d482a",
    measurementId: "G-XR3QF0KCYG",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
// const analytics = getAnalytics(app);
const messaging = getMessaging(app);
let permission = await Notification.requestPermission();

getToken(messaging, {
    vapidKey:
        "BIunIfh4lyaTrAgqN3JKcjXuyI1qUwqGnyrKfOkc0cFfQuMyt8AKH4OJ5xt_QidQp1WWLCwpur6NudnSihQmWAA",
})
    .then((currentToken) => {
        if (currentToken) {
            // Send the token to your server and update the UI if necessary
            // ...
            // console.log(currentToken);
            console.log("FCM Token:", currentToken);
            sentTokenToServer(currentToken);
        } else {
            console.warn("No token available. Request permission.");
            // Show permission request UI
            requestPermission();
            // console.log(
            //     "No registration token available. Request permission to generate one."
            // );
            // ...
        }
    })
    .catch((error) => {
        // console.log("An error occurred while retrieving token. ", error);
        console.error("Error retrieving token:", error);
        // ...
    });

onMessage(messaging, async (payload) => {
    console.log("Message received. ", payload);
    alert("ada notifikasi baru");
    // let permission = await Notification.requestPermission();
    // const greeting = new Notification("Hi, How are you?", {
    //     body: "Have a good day",
    // });
});

function sentTokenToServer(token) {
    var csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let formData = new FormData();
    formData.append("web_token", token);
    fetch("/tokenweb", {
        headers: {
            "X-CSRF-Token": csrf,
            _method: "_POST",
        },
        method: "post",
        credentials: "same-origin",
        body: formData,
    })
        .then((response) => {
            console.log(response.status);
        })
        .catch((error) => {
            console.error("Error sending token to server:", error);
        });
}

function requestPermission() {
    Notification.requestPermission().then((permission) => {
        if (permission === "granted") {
            console.log("Notification permission granted.");
            // TODO(developer): Retrieve a registration token for use with FCM.
            // ...
        } else {
            alert(
                "Silahkan izinkan notifikasi untuk mendapatkan notifikasi terbaru dari kami"
            );
        }
    });
}
