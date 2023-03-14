import express from "express";
import db from "../db/conn.mjs";
import { ObjectId } from "mongodb";

const router = express.Router();

// Get all contacts
router.get("/", async (req, res) => {
  let collection = await db.collection(process.env.COLLECTION_NAME);
  let results = await collection.find({})
    .limit(50)
    .toArray();

  res.send(results).status(200);
});

// Get a single contact
router.get("/:id", async (req, res) => {
  let collection = await db.collection(process.env.COLLECTION_NAME);
  let query = {_id: new ObjectId(req.params.id)};
  let result = await collection.findOne(query);

  if (!result) res.send("Not found").status(404);
  else res.send(result).status(200);
});

// Add a new document to the collection
router.post("/", async (req, res) => {
  let collection = await db.collection(process.env.COLLECTION_NAME);
  let newDocument = req.body;
  newDocument.date = new Date();
  let result = await collection.insertOne(newDocument);
  res.send(result).status(204);
});

// Update the contact
router.patch("/:id", async (req, res) => {
  const query = { _id: new ObjectId(req.params.id) };
  var updates = { $set: req.body };

  let collection = await db.collection(process.env.COLLECTION_NAME);
  let result = await collection.updateOne(query, updates);
  
  res.send(result).status(200);
});

// Delete a contact
router.delete("/:id", async (req, res) => {
  const query = { _id: new ObjectId(req.params.id) };

  const collection = db.collection(process.env.COLLECTION_NAME);
  let result = await collection.deleteOne(query);

  res.send(result).status(200);
});

export default router;
