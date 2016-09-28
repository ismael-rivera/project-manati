# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/xenial64"
  config.vm.box_check_update = false

  #config.ssh.username = 'ubuntu'
  #config.ssh.password = 'vagrant'
  #config.ssh.insert_key = 'true'

  config.vm.provision :shell, path: "provision.sh"
  config.vm.hostname = "localhost"
  config.vm.network :forwarded_port, guest: 80, host: 8931, auto_correct: true
  config.vm.network "private_network", ip: "192.168.33.10"

  #http://127.0.0.1:8931/
  config.vm.network "public_network"

  # config.vm.synced_folder "../data", "/vagrant_data"
  config.vm.synced_folder "~/Sites/mysites/jobbyjobz/project-manati/stgBE-FA$", "/var/www", create: true

  config.vm.provider "virtualbox" do |vb|
     # Display the VirtualBox GUI when booting the machine
     # vb.gui = true
     # Customize the amount of memory on the VM:
       vb.memory = "1024"

  end 
end
