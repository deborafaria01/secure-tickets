#!/usr/bin/env python3

import os

def menu():
    print("\n=== SecureTickets Lab Manager ===")
    print("1 - Build Docker Image")
    print("2 - Start Containers")
    print("3 - Rebuild (Full Rebuild)")
    print("4 - Initialize Database (Run init.sql)")
    print("5 - Stop Containers")
    print("6 - Exit")

while True:
    os.system("clear")  # Use "cls" if running on Windows
    print("SecureTickets - Ambiente de Laboratório\n")
    menu()
    choice = input("Escolha uma opção: ").strip()

    if choice == "1":
        print("\n[+] Build da imagem Docker em andamento...")
        os.system("docker-compose build")
    elif choice == "2":
        print("\n[+] Subindo containers...")
        os.system("docker-compose up -d")
    elif choice == "3":
        print("\n[+] Executando rebuild completo (down + build + up)...")
        os.system("docker-compose down")
        os.system("docker-compose build")
        os.system("docker-compose up -d")
    elif choice == "4":
        print("\n[+] Inicializando o banco de dados...")
        db_container = os.popen("docker ps -qf name=db").read().strip()
        if db_container:
            os.system(f"docker exec -i {db_container} psql -U postgres -d securetickets < init.sql")
        else:
            print("[-] O container do banco não está rodando. Suba os containers primeiro.")
    elif choice == "5":
        print("\n[+] Parando todos os containers...")
        os.system("docker-compose down")
    elif choice == "6":
        print("\nEncerrando...")
        break
    else:
        print("Opção inválida. Tente novamente.")
