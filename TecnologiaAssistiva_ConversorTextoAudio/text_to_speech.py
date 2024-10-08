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
