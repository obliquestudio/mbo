# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'PROJECTNAME'
set :repo_url, 'UPDATEME'
set :group, 'www-data'

set :log_level, :info
# set :log_level, :info
set :linked_dirs, %w{wp-content/uploads wp-content/plugins wp-admin wp-includes}
set :linked_files, %w{index.php wp-activate.php wp-blog-header.php wp-comments-post.php wp-config.php wp-cron.php wp-links-opml.php wp-load.php wp-login.php wp-mail.php wp-settings.php wp-signup.php wp-trackback.php xmlrpc.php wp-content/index.php }

namespace :deploy do

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

end


namespace :theme do

	task :upload do
		on roles(:all) do
	        execute "mkdir #{release_path}/wp-content/themes" #create themes directory for distribution files
	        upload! '../theme_dist', "#{release_path}/wp-content/themes", recursive: true
		end
	end

end

after 'deploy:finished', 'theme:upload' 