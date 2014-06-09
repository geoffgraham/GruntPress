# GruntPress WordPress Theme

This is a boilerplate WordPress project that supports a development-to-production workflow using [Grunt](http://gruntjs.com/).

## Getting Started

If you haven't used Grunt before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains what it is and what it does.

Once installed, Grunt will include all plugins and depencies for this project as defined in `pacakge.json`.

## Available Tasks

If it looks like there are a crap ton of tasks in this project, it's because there are. These are tasks I find useful for nearly project I work on which is why they are included. Don't like 'em, take them out. There are probably some tasks you think are indepensible and should be in here. Go for it, roll your own. The point is not to be dogmatic with a specific workflow, but what works best for you.

These are what are currently available.

### Default

Command: `grunt`

What it runs: `connect` and `watch`

What it does: `connect` will start a server and open for you in a new browser window. `watch` looks for file changes and automatically refreshes the browser window for you.

### Process

Command: `process`

What it runs: `concat`, `uglify`, `sass`, `autoprefixer`, `cssmin`, `modernizr`, `imagemin`

What it does: This command prepares all the files in the `development` directory for production. Here is a breakdown of everything it does:

* `concat`: Concatenates all Javascript files into a single output file
* `uglify`: Minifies the output Javascript file
* `sass`: Processes all Sass files into a single output file
* `autoprefixr`: Runs [Autoprefixr](https://github.com/nDmitry/grunt-autoprefixer) on the output CSS file
* `cssmin`: Minifies the CSS output file
* `modernizr`: Produces a minified custom [Modernizr](http://modernizr.com/) file based on the Modernizr features used in the project
* `imagemin`: Optimizes files in the `images` directory to their smallest size

### Move

Command: `move`

What it runs: `copy`

What it does: This moves your processed and optimized files from the `development` directory to `production`.

### Prod

Command: `prod`

What it runs: `connect:prod`

What it does: This runs another `connect` command that starts a new server and open a new browser window that allows you to preview your production build.

OK, this gets a little funky. What I would like to do here is have `connect` start a PHP-friendly server in order to view my working WordPress installation, but it isn't there yet. So, for now, I recommend running MAMP and running a typical WordPress installation before running this command. It's not perfect, but does work.

[Here is a workaround](http://robandlauren.com/2014/02/05/live-reload-grunt-wordpress/) using `wp_enqueue_script` if that's your flavor.

### SVG

What it runs: `svgstore`

What it does: This command merges SVG files in the `development` directory into a single `defs` file, according to Chris Coyier's [SVG icon system](http://css-tricks.com/svg-sprites-use-better-icon-fonts/).

## Contributing

In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests for any new or changed functionality. Please lint and test your code.