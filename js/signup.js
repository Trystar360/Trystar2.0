var config = {
    apiKey: "AIzaSyByUyn6WT8DcE8z9T0Tong0OAkoaFEuxzE",
    authDomain: "database-test-2e21e.firebaseapp.com",
    databaseURL: "https://database-test-2e21e.firebaseio.com",
    projectId: "database-test-2e21e",
    storageBucket: "database-test-2e21e.appspot.com",
    messagingSenderId: "158761518926"
 };
firebase.initializeApp(config);

var db = firebase.database();
var ref = db.ref('users');

    signup.onsubmit = function() {
    console.log("submit");

    var pass = document.getElementById('spass').value;
    var hashpass = Sha256.hash(pass);

    var data = {
        first: document.getElementById('first').value,
        last: document.getElementById('last').value,
        email: document.getElementById('email').value,
        username: document.getElementById('susername').value,
        pass: hashpass
    }

    ref.push(data);
    console.log(data);
}

function signup() {
    console.log("submit");

    var pass = document.getElementById('spass').value;
    var hashpass = Sha256.hash(pass);

    var data = {
        first: document.getElementById('first').value,
        last: document.getElementById('last').value,
        email: document.getElementById('email').value,
        username: document.getElementById('susername').value,
        pass: hashpass
    }

    ref.push(data);
    console.log(data);
}


