from instagram_private_api import Client, ClientCompatPatch, errors
import sys

"""
invalid_user > KULLANICI ADI HATASI

bad_password > PAROLA HATASI

Bad Request: two_factor_required > DOĞRULAMA HATASI

"""

if len(sys.argv) > 1:
    username = sys.argv[1]
else:
    print(f"Username \nBoş")
    exit(0)
if len(sys.argv) > 2:
    password = sys.argv[2]
else:
    print(f"Password \nBoş")
    exit(0)

def main():

    try:
        api = Client(username, password)
    except errors.ClientLoginError as e:
        print(f"Kullanıcı adınız veya şifreniz hatalı! \n{e}")
        exit(0)
    except errors.ClientChallengeRequiredError as e:
        print(f"Giriş için doğrulama gerekli!\n{e}")
        exit(0)
    except errors.ClientCheckpointRequiredError as e:
        print(f"Giriş için doğrulama gerekli!\n{e}")
        exit(0)
    except errors.ClientSentryBlockError as e:
        print(f"Giriş yapılamadı! Hesap spam olarak işaretlenmiş!\n{e}")
        exit(0)
    except errors.ClientConnectionError as e:
        print(f"Bağlantı hatası!\n{e}")
        exit(0)
    except errors.ClientError as e:
        print(f"Giriş yapılamadı!\n{e}")
        exit(0)
    
    print(f"Giriş yapıldı!\nSuccessful")
    
if __name__ == "__main__":
    try:
        main()
    except KeyboardInterrupt:
        print()
    pass
