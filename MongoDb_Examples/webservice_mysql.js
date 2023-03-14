const express = require('express');
const app = express();
const cors = require('cors');
const bodyParser = require('body-parser');
const mysql = require('mysql');

app.use(bodyParser.json());
app.use(express.urlencoded({ extended: true }));
app.use(cors());

var con = mysql.createConnection({ 
  host: "localhost", 
  database: "contacts", 
  user: "contacts_user", 
  password: "passw0rd" 
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

//all records
app.get('/api/contacts', (req, res) => {
  var sql = "SELECT * FROM contact;"
  con.query(sql, function (err, result) {
    if (err) throw err;
    res.json(result);
  });
})

//specific record
app.get('/api/contacts/:id', (req, res) => {
  var sql = "SELECT * FROM contact WHERE id = " + req.params.id + ";"
  con.query(sql, function (err, result) {
    if (err) throw err;
    res.json(result);
  });
})

app.listen(3333);

console.log('Listening on localhost:3333');
