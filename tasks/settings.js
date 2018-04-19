module.exports = {
  "browsersync": {
    "files": [
      "./src/_compiled/styles.css",
      "./src/_compiled/*.js",
      "./src/*.php"
    ],
    //"server": "src", // use this if it IS a static site
     "proxy": "extension.test", // use this if it's NOT a static site, ex: app.mysite.dev
    "notify": false,
    "open": false
  },
  "templatePath": "/*.php" // Relative to the src directory
}
