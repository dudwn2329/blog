const path = require('path');

module.exports = {
    mode:"development",
    entry:"./index.js",
    output:{
        "filename" : "app.js",
        "path":path.join(__dirname, "public/js")
    },
    module:{
        rules:[
            {
                test:/\.css$/,
                use:['style-loader', 'css-loader']
            }
        ]
    }
}