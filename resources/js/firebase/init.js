import { initializeApp } from "firebase/app";
import { getFirestore } from "firebase/firestore";

const firebaseConfig = {
    apiKey: "AIzaSyAZUHpSN7-IFvGyLA5WVDAmA8PwJdL5BJo",
    authDomain: "hustmedia-5e3cf.firebaseapp.com",
    databaseURL: "https://hustmedia-5e3cf-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "hustmedia-5e3cf",
    storageBucket: "hustmedia-5e3cf.appspot.com",
    messagingSenderId: "28575489156",
    appId: "1:28575489156:web:6737237757d43e3eb036d1",
    measurementId: "G-VJGVRMYSR5"
  };

// init firebase
initializeApp(firebaseConfig)

// init firestore service
const db = getFirestore()
export default db