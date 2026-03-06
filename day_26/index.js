const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const products = mongoose.Schema({
    name:String,
    categories:Array,
    price:Number
})

module.exports = mongoose.model('products',products)