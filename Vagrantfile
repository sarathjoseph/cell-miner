# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "hashicorp/precise32"

  config.vm.provision :shell, :path => "bootstrap.sh"

  config.vm.network :private_network, ip: "192.168.233.145"

  config.vm.synced_folder "www", "/vagrant/www", :owner => 'www-data', :group => 'www-data'
  config.vm.synced_folder "setup", "/vagrant/setup"
  config.vm.synced_folder "files", "/vagrant/files"
end