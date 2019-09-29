Vagrant.configure(2) do |config|
	config.vm.hostname = "devops"
	config.vm.box="ubuntu/trusty64"
	config.vm.box_check_update=false
	config.vm.network "private_network",ip:"192.168.33.10"
	config.vm.network "public_network"
	config.vm.provider 'virtualbox' do |vb|
		vb.gui 		= false
		vb.memory	="1024"
		vb.cpus		="2"
	end

	config.vm.provision "shell",inline: <<-SHELL
		sudo apt-get update
	SHELL

end
