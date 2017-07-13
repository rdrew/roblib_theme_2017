# Default to development if environment is not set.
saved = environment
if (environment.nil?)
  environment = :development
else
  environment = saved
end


# Require any additional compass plugins here.
require 'sassy-buttons'
require 'susy'
require 'breakpoint'



# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "../"
sass_dir = "/"
images_dir = "../images"
javascripts_dir = "../javascripts"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass

##
## You probably don't need to edit anything below this.
##

# You can select your preferred output style here (:expanded, :nested, :compact
# or :compressed).
#output_style = (environment == :production) ? :expanded : :nested

# To enable relative paths to assets via compass helper functions. Since Drupal
# themes can be installed in multiple locations, we don't need to worry about
# the absolute path to the theme from the server omega.
relative_assets = false

# Conditionally enable line comments when in development mode.
line_comments = (environment == :production) ? false : false

# Output debugging info in development mode.
sass_options = (environment == :production) ? {} : {:debug_info => false}
