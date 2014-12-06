# This is an upstart (http://upstart.ubuntu.com/) script
# to run the node.js server on system boot and make it
# manageable with commands such as
# 'start node-app' and 'stop node-app'
#
# This script is to be placed in /etc/init to work with upstart.
#
# Internally the 'initctl' command is used to manage:
# initctl help
# initctl status node-app
# initctl reload node-app
# initctl start node-app

description "node.js forever server for Erudite"
version "1.0"

expect fork

# used to be: start on startup
# until we found some mounts weren't ready yet while booting:

start on started mountall
stop on shutdown

# Automatically Respawn:
respawn
respawn limit 99 5

env HOME=/home/koscoder/erudite/listener

script
    # Not sure why $HOME is needed, but we found that it is:
    export HOME=$HOME
    chdir $HOME
    exec sudo -u www-data /usr/local/bin/node server.js > logs/node.log &
end script

#post-start script
#   # Optionally put a script here that will notifiy you node has (re)started
#   # /root/bin/hoptoad.sh "node.js has started!"
#end script