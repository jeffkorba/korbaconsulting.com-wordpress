// webpack.config.js

module.exports = {
	entry: './sass/global.scss',
	output: {
		filename: './css/style.css',
	},
	module: {
		rules: [{
			test: /\.scss$/,
			use: [{
				loader: "style-loader"
			}, {
				loader: "css-loader"
			}, {
				loader: "sass-loader"
			}]
		}]
	}
};
