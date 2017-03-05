# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.provider :virtualbox do |vb|
    vb.gui = true
  end
  config.vm.box = "coreos-alpha"
  
  config.ssh.insert_key = false
  
  Vagrant.configure("2") do |config|
    config.ssh.private_key_path = "~/.ssh/authorized_keys"
    config.ssh.forward_agent = true
  end

  config.ssh.username = 'root'
  config.ssh.password = 'vagrant'
  config.ssh.insert_key = 'true'

  # config.vm.provision "file", source: "~/.ssh/id_boot2docker.pub", destination: "~/.ssh/authorized_keys"

end