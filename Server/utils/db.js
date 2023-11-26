import mysql from 'mysql';

const con = mysql.createConnection({
    host: "127.0.0.1",
    user: "root",
    password: "",
    database: "employeezh"
});

con.connect(function(err){
    if (err) {
        console.error("Error connecting to the database:", err);
    } else {
        console.log("Connected to the database");
    }
});

export default con;
