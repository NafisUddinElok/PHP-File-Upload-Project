# 📤 PHP File Upload Project

This is a simple PHP project that allows users to upload files to the server using a basic HTML form. It includes essential validation such as file type checking and file size limit. Uploaded files are saved with unique names inside the `uploads/` directory.

---

## 🔧 Features

- Upload files through an HTML form
- Allowed file types: JPG, JPEG, PNG, PDF, TXT
- Maximum file size: 2MB
- Automatically renames files using `uniqid()` to avoid conflicts
- All uploaded files are saved to the `uploads/` folder
- Basic error messages for invalid uploads

---

## 🧰 Technologies Used

- PHP (Core)
- HTML (Frontend)
- No database required

---

## 📁 Project Structure

file_upload_project/

├── index.html → Upload form

├── upload.php → PHP upload logic and validation

├── uploads/ → Uploaded files are saved here
