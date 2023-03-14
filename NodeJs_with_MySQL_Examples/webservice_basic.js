'use strict';

const express = require('express');
const app = express();
const cors = require('cors');
const bodyParser = require('body-parser');

app.use(bodyParser.json());
app.use(express.urlencoded({ extended: true }));
app.use(cors());

//instead of a database, just an array of data (contacts)
var data = [
  {"id":1,"first_name":"Gary","last_name":"Ortiz","email":"gortiz0@mapy.cz","country":"Indonesia","modified":"2015-05-16","vip":false},
  {"id":2,"first_name":"Albert","last_name":"Williamson","email":"awilliamson1@narod.ru","country":"China","modified":"2015-03-11","vip":true},
  {"id":3,"first_name":"Mildred","last_name":"Fuller","email":"mfuller2@npr.org","country":"Peru","modified":"2015-02-15","vip":true},
  {"id":4,"first_name":"Russell","last_name":"Robinson","email":"rrobinson3@google.pl","country":"Belarus","modified":"2014-10-31","vip":false},
  {"id":5,"first_name":"Laura","last_name":"Harper","email":"lharper4@boston.com","country":"Philippines","modified":"2015-01-14","vip":false},
  {"id":6,"first_name":"Larry","last_name":"Sanders","email":"lsanders5@cornell.edu","country":"China","modified":"2015-01-11","vip":false},
  {"id":7,"first_name":"Michael","last_name":"Rice","email":"mrice6@geocities.jp","country":"Philippines","modified":"2014-12-06","vip":true},
  {"id":8,"first_name":"Sara","last_name":"Harris","email":"sharris7@deliciousdays.com","country":"Indonesia","modified":"2014-11-05","vip":true},
  {"id":9,"first_name":"Phyllis","last_name":"Webb","email":"pwebb8@reddit.com","country":"China","modified":"2015-04-02","vip":true},
  {"id":10,"first_name":"Roger","last_name":"Alvarez","email":"ralvarez9@nsw.gov.au","country":"Finland","modified":"2015-03-21","vip":true}
];

//handle a get request
app.get('/api/contacts', (req, res) => {
  res.json(data);
})

app.listen(3333);

console.log('Listening on localhost:3333');
