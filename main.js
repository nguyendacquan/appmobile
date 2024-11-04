const express = require('express');
const mysql = require('mysql');
const app = express();

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'duantotnghiep'
});

db.connect((err) => {
    if (err) throw err;
    console.log('Connected to database');
});

app.get('/api/data', (req, res) => {
    db.query('SELECT * FROM trips_details', (err, results) => {
        if (err) throw err;
        res.json(results);
    });
});

app.listen(3000, () => {
    console.log('Server is running on port 3000');
});
