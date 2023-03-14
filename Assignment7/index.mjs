//based on: https://github.com/mongodb-developer/mongodb-express-rest-api-example/
import express from "express";
import cors from "cors";
import "./loadEnvironment.mjs";
import "express-async-errors";
import contacts from "./routes/contacts.mjs";

const PORT = process.env.PORT || 5050;
const app = express();

app.use(cors());
app.use(express.json());

// Load the /contacts routes
app.use("/api/contacts/", contacts);

// Global error handling
app.use((err, _req, res, next) => {
  res.status(500).send("Uh oh! An unexpected error occured.")
})

// start the Express server
app.listen(PORT, () => {
  console.log(`Server is running on port: ${PORT}`);
});
