##### [Retorne a página principal](https://github.com/Enilson1982/dio-desafio-github-primeiro-repositorio/blob/main/README.md)

# Alguns passsos para Usar Git/ Github



## Instalação do Git Bash

Segue link para baixar o terminal Git: <https://git-scm.com/>
(escolha o mesmo sistema operacional que está em sua maquina) e
esse para abrir uma conta no Github: https://github.com/.

O Git funciona na sua máquina e o Github nas nuvens.

## Alguns comandos utilizados pelos Git Bash:

WIndows     |       Linux     |         Ação
----------- | --------------- |------------------
mkdir       |       mkdir     |     (Cria uma pasta)
mv          |       mv        |     (Remove um arquivo)
del/rmdir   |       rm-rf     |     (Remove diretório) 
cd          |       cd        |     (Abri uma pasta)
cd..        |       cd..      |     (Volta a pasta anterior)
cls         |       clear     |     (limpa tela)
ls          |       ls        |     (mostra o conteúdo da pasta)
ls -a       |       ls -a     |     (mostra os ocultos)

## O Git possui internamente:

- Blobs
- Trees
- Commits

## Para configurar o Git Bahs é necessário utilizar os seguintes passo:

Criar (no seu sistema operacinal ou no Git) e  Abrir uma pasta  de trabalho no Git bash.  
Ex: cd /c/dio/atividade

                                      \\No terminal Git Bash

Utilizar o comando git init

                             \\Em um editor de texto instalado                                        


Abrir um arquivo de texto ou markdown realizar uma digitação e na hora de  salvar localize a pasta do Git "/c/dio/atividade" para ser salvo corretamente no local. E salve como o nome desafio.txt. 

                                     
                                    \\No terminal Git Bash

Abrindo a pasta com o comando: cd /c/dio/atividade

É obrigado committar o arquivo criado na pasta. Pode ser commitado de duas formas:
                                        \\Adiciona o arquivo
git add * 
ou  
git add desafio.txt
                                     \\Commitar o arquivo

git commit -m"arquivo novo desfio"


Usando esses passos acima já obtemos o nosso primeiro arquivo reconhecido no Git Bash.


## Criando uma chave ssh no Git bash para utilizar no Github

Ainda no terminal no caminho cd /c/dio/atividade utiliza o seguinte comando: 

      ssh-keygen -t ed25519 -C seu@email  
(esse comando é padrão só no final é necessário colocar seu email)

Confirme com enter

Pronto os códigos de sua chave foi criado.

      ~/.ssh eval $(ssh-agent -s)
como esse comando informa o local da chave
 
Usando o cd e o caminho mostrado do local da pasta  
Ex: cd /c/Users/João/.ssh/

Usa o comando  
cat id_ed25519.pub  
(aparece a chave)  
(esse chave que vai aparecer que será usada no Github, então você copia, "ssh" até o final do "email")

                                       \\Segue para o Github

Na direita da tela, ao lado da sua imagem, clique em  uma seta pra baixo a.
que vai abrir várias opções mas utilize os seguintes caminhos:

Settings  >  SSH and GPG keys

Titlte
Coloca um Título

Key
Cola a chave copiada lá no Git bash

Add SSh key

chave criada


Crie um repositório

Clique no botão: Repositories

coloque um nome e clique em update

Abra o repositorio criado

Clique em Code - SSH e Copie o endereço que aparece.


                                      \\No terminal do Git Bash na pasta 


Use o comando:

                             eval $(ssh-agent -s)

vai aparecer o camino onde esta  a chave

/c/Users/João/.ssh/

Copie o caminho acima e abra 

                              cd /c/Users/João/.ssh/

Use o comando ls

Depois

                             cat id_ed25519.pub

Depois use o comando

                            eval $(ssh-agent -s)

Por fim use 

                            ssh-add id_ed25519


Siga para pasta do arquivo criado a do init:

cd /c/dio/atividade 

com a pasta aberta pode usar os comandos: 

git push cole o endereço copiado no repositorio do Github

ex: git push (Link copiado)

(ele envia a pasta e o arquivo para o repositório)
 ou quando você fizer alguma atividade no Github você pode enviá-lo para sua máquina usando o fetch 
 
 git fetch cole o endereço copiado no repositorio do Github

ex: git push (Link copiado)

Com o git clone você pode clonar todo repositório que exista no Github para sua máquina

git clone cole o endereço copiado no repositorio

(envia o conteudo que está no repositório)

Entretanto apenas da forma demonstrada que conseguir realizar o processo de git push e git fetch.
Seguindo esses passos que aprendi com o orientador: Otávio Reis Perkles._ da Dio. 
Bootcamp - Philips Fullstack Developer | You Are You  
