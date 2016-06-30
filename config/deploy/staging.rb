# server-based syntax
# ======================
# Defines a single server with a list of roles and multiple properties.
# You can define all roles on a single server, or split them:

# server 'example.com', user: 'deploy', roles: %w{app db web}, my_property: :my_value
# server 'example.com', user: 'deploy', roles: %w{app web}, other_property: :other_value
# server 'db.example.com', user: 'deploy', roles: %w{db}

role :app, %w{user@server}
role :web, %w{user@server}
role :db,  %w{user@server}

set :deploy_to, '/var/www/DEVURL/public_html/PROJECTNAME'