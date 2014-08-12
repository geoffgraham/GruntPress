module.exports = {
  dev: {
		options: {
			port: 8001,
			base: 'development',
			keepalive: true,
			open: true
		}
	},
	prod: {
		options: {
			port: 8002,
			base: 'production',
		}
	}
}