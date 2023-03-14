const express = require('express');
const app = express();
const cors = require('cors');
const bodyParser = require('body-parser');
const MongoClient = require("mongodb").MongoClient;

app.use(bodyParser.json());
app.use(express.urlencoded({ extended: true }));
app.use(cors());

const CONNECTION_URL = "mongodb://unxe9tx5ni90nlrsjso6:Go0ZbQtyULpHxKyjxO6o@n1-c2-mongodb-clevercloud-customers.services.clever-cloud.com:27017,n2-c2-mongodb-clevercloud-customers.services.clever-cloud.com:27017/bjtmmevcdykpz2x?replicaSet=rs0";
const DATABASE_NAME = "bjtmmevcdykpz2x";
const COLLECTION_NAME = "contacts";

var database, collection;

app.get('/api/contacts', (req, res) => {
    collection.find({}).toArray((error, result) => {
        if(error) {
            return res.status(500).send(error);
        }
        res.send(result);
    });
})

app.get('/api/contacts/:id', (req, res) => {
    var id = Number(req.params.id);

    collection.findOne({ "id": id }, (error, result) => {
        if(error) {
            return res.status(500).send(error);
        }
        res.send(result);
    });   
})

app.post('/api/contacts', (req, res) => {
    collection.insert(req.body, (error, result) => {
        if(error) {
            return res.status(500).send(error);
        }
        res.send(result.result);
    });
})

app.put('/api/contacts/:id', (req, res) => {
    var id = Number(req.params.id);

    var myquery = { "id": id };
    var newvalues = { $set: req.body };
    collection.updateOne(myquery, newvalues, function(error, result) {
        if(error) {
            return res.status(500).send(error);
        }
        res.send(result.result);
    });
})

app.delete('/api/contacts/:id', (req, res) => {
    var id = Number(req.params.id);

    var myquery = { "id": id };
    collection.deleteOne(myquery, function(error, result) {
        if(error) {
            return res.status(500).send(error);
        }
        res.send(result.result);
    });
})


var database, collection;

app.listen(5000, () => {
    MongoClient.connect(CONNECTION_URL, { useNewUrlParser: true, useUnifiedTopology: true }, (error, client) => {
        if(error) {
            throw error;
        }

        database = client.db(DATABASE_NAME);
        collection = database.collection(COLLECTION_NAME);

        console.log("Running on port 5000 - connected to `" + DATABASE_NAME + "`");
    });
});