programa
{
	
	funcao inicio()
	{
		real janeiro, fevereiro, marco, abril, media
		cadeia funcionario

		escreva("Qual o nome do funcionario?")
		leia(funcionario)
		escreva("Quanto vendido no mês de Janeiro:")
		leia(janeiro)
		escreva("Quanto vendido no mês de Fevereiro:")
		leia(fevereiro)
		escreva("Quanto vendido no mês de Março:")
		leia(marco)
		escreva("Quanto vendido no mês de Abril:")
		leia(abril)

		media = (janeiro+fevereiro+marco+abril)/4
		
		escreva("O funcionario" + funcionario + " obeteve a média de " + media + " no primeiro quadrimestre no ano. ")
		
		se (media >= 5000) {
			escreva("\nParabéns você rebeceu uma bonificação de 10%.") // \n é a quebra de linha.
		}
		senao {
			escreva("\nSua bonificação foi de 3%.")
		}	
		

	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 761; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */