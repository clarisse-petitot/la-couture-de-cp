"""
Image Resizing Script

This script resizes all PNG images in the specified folder to 800x800 pixels 
and saves the resized copies with '_low' appended to the original filename.

Requirements:
- Python 3.x
- Pillow library (install using 'pip install pillow')

Usage:
1. Place this script in the same directory as your 'creations' folder or adjust the 
   'input_folder' path accordingly.
2. Run the script. The resized images will be saved in a 'resized' subdirectory 
   within the 'creations' folder.
"""


import os
from PIL import Image

# Chemin vers le dossier contenant les images
input_folder = 'creations'

# Crée le dossier de sortie s'il n'existe pas
output_folder = os.path.join(input_folder, 'resized')
os.makedirs(output_folder, exist_ok=True)

# Parcourt tous les fichiers dans le dossier d'entrée
for filename in os.listdir(input_folder):
    if filename.endswith('.png'):
        # Ouvre l'image
        img_path = os.path.join(input_folder, filename)
        img = Image.open(img_path)
        
        # Redimensionne l'image
        img_resized = img.resize((700, 700), Image.Resampling.LANCZOS)
        
        # Crée le nouveau nom de fichier
        base, ext = os.path.splitext(filename)
        new_filename = f"{base}_low{ext}"
        output_path = os.path.join(output_folder, new_filename)
        
        # Enregistre l'image redimensionnée
        img_resized.save(output_path, format='PNG')
        
        print(f"Image {filename} redimensionnée et sauvegardée sous {new_filename}")

print("Redimensionnement terminé pour toutes les images PNG.")
