Vamos criar um sistema simples de tecnologia assistiva que converte texto em fala. 
Isso pode ser útil para pessoas com deficiência visual ou dificuldades de leitura. 
Vou usar Python com a biblioteca gTTS (Google Text-to-Speech) para isso.

Requisitos
1. Python instalado no seu computador.
2. Instalar a biblioteca `gTTS`. Você pode fazer isso com o comando:

   ```bash

   pip install gTTS
   

Código simples que converte texto em um arquivo de áudio:

```python

from gtts import gTTS
import os

def text_to_speech(text, language='pt'):
    # Cria um objeto gTTS
    tts = gTTS(text=text, lang=language, slow=False)

    # Salva o arquivo de áudio
    tts.save("output.mp3")
    print("Arquivo de áudio salvo como 'output.mp3'.")

    # Reproduz o áudio (opcional)
    os.system("start output.mp3")  # Para Windows
    # os.system("afplay output.mp3")  # Para MacOS
    # os.system("mpg321 output.mp3")  # Para Linux

if __name__ == "__main__":
    texto = input("Digite o texto que você deseja converter em fala: ")
    text_to_speech(texto)



Como usar

1. Copie o código acima para um arquivo chamado `text_to_speech.py`.
2. Execute o script pelo terminal:

   ```bash
   python text_to_speech.py
   

3. Digite o texto que você deseja converter em fala.
4. O áudio será salvo como `output.mp3` e, se estiver no Windows, será reproduzido automaticamente.


