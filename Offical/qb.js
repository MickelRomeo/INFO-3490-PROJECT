(function() {
// Initialize Firebase
    var config = {
        apiKey: "AIzaSyCNVlh9Z3xmx7W44bbPEgA_eimlDnkyxJc",
        authDomain: "quick-bites-dashboard-app.firebaseapp.com",
        databaseURL: "https://quick-bites-dashboard-app.firebaseio.com",
        projectId: "quick-bites-dashboard-app",
        storageBucket: "quick-bites-dashboard-app.appspot.com",
        messagingSenderId: "493884657785"
    };
    firebase.initializeApp(config);

    // Get elements
    const preObject = document.getElementByID('');
    //Create References
    const dbRefObject = firebase.database().ref().child('');
    //Sync object changes
    dbRefObject.on('value', snap => console.log(snap.val()));

}());

function validateForm() {
    var x = document.forms["lForm"]["Username"].value;
    var y = document.forms["lForm"]["Password"].value;
    if (x == "" || y == "") {
        alert("All feilds must be filled out");
        return false;
    }
}