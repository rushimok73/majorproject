const express = require('express');

const app = express();
app.get('/', (req,res)=>{
  res.send('We are at home');
});

app.get('/posts', (req,res)=>{
  res.send('We are at post');
});

app.listen(7000);
