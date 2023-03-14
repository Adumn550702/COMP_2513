from flask import Flask, request, jsonify
from flask_mysqldb import MySQL

#call http://localhost:5000/contacts

app = Flask(__name__)
 
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'contacts_user'
app.config['MYSQL_PASSWORD'] = 'passw0rd'
app.config['MYSQL_DB'] = 'Contacts'
 
mysql = MySQL(app)

@app.route('/contacts')
def form():
    #name = request.form['name']

    query_string = "SELECT * FROM contact"
    cur = mysql.connection.cursor()
    cur.execute(query_string)

    result = cur.fetchall()

    return jsonify(result)

app.run()