const mysql = require('mysql');

const pool = mysql.createPool({
    connectionLimit: 10, 
    host: 'root',
    user: '', 
    password: '', 
    database: 'car_management' 
});
module.exports = pool;
