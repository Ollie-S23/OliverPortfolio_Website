window.addEventListener("load", function ()
{
    var containerToHide = document.getElementById("createPost_containerID");
    var createBtn = document.getElementById("CreateBtn");

    if (containerToHide != null)
    {
        containerToHide.style.display = "none";
    }

    if (createBtn != null)
    {
        createBtn.addEventListener("click", function ()
        {
            if (containerToHide != null)
            {
                var isHidden = window.getComputedStyle(containerToHide).display === "none";

                if (isHidden == true)
                {
                    containerToHide.style.display = "block";
                    createBtn.value = "Close Form";
                }
                else
                {
                    containerToHide.style.display = "none";
                    createBtn.value = "Create Post";
                }
            }
        });
    }
});

// window.addEventListener("load", function ()
// {
//     const form = document.getElementById("create_post_form");

//     if (form != null)
//     {
//         form.addEventListener("submit", function (event)
//         {
//             const validationResult = validateForm();

//             if (validationResult.result == false)
//             {
//                 event.preventDefault();
//                 displayErrorMessage(validationResult.errMsg);
//                 return;
//             }
//             else
//             {
//                 clearErrorMessage();
//                 return;
//             }
//         });
//     }
// });

// function validateForm()
// {
//     let errMsg = "";
//     let result = true;

//     const fileUpload = document.getElementById("file-upload");

//     if (fileUpload != null)
//     {
//         const files = fileUpload.files;

//         if (files.length > 0)
//         {
//             const allowedTypes = ["jpg", "jpeg", "png"];

//             for (let i = 0; i < files.length; i++)
//             {
//                 const file = files[i];
//                 const fileName = file.name;

//                 let fileExtension = "";

//                 if (fileName.includes(".") == true)
//                 {
//                     const splitName = fileName.split(".");
//                     fileExtension = splitName[splitName.length - 1].toLowerCase();
//                 }
//                 else
//                 {
//                     fileExtension = "";
//                 }

//                 let isAllowed = false;

//                 for (let j = 0; j < allowedTypes.length; j++)
//                 {
//                     if (fileExtension === allowedTypes[j])
//                     {
//                         isAllowed = true;
//                         break;
//                     }
//                 }

//                 if (isAllowed == false)
//                 {
//                     errMsg = errMsg + "File type not allowed: " + fileName + "\n";
//                     result = false;
//                 }
//             }

//             if (result == false)
//             {
//                 errMsg = errMsg + "Allowed file types are: " + allowedTypes.join(", ") + "\n";
//             }
//         }
//     }

//     return {
//         errMsg: errMsg,
//         result: result
//     };
// }

// function displayErrorMessage(message)
// {
//     const errorDiv = document.getElementById("error-message");

//     if (errorDiv != null)
//     {
//         errorDiv.innerText = message;
//         errorDiv.style.display = "block";
//     }
//     else
//     {
//         alert(message);
//     }
// }

// function clearErrorMessage()
// {
//     const errorDiv = document.getElementById("error-message");

//     if (errorDiv != null)
//     {
//         errorDiv.innerText = "";
//         errorDiv.style.display = "none";
//     }
// }

function Validate() {
    let errMsg = "";
    let result = true;

    //fields 

    const fileUpload = document.getElementById("file-upload");

    //validation logic

    if (fileUpload != null)
    {
        const files = fileUpload.files;

        if (files.length > 0)
        {
            const allowedTypes = ["jpg", "jpeg", "png"];

            for (let i = 0; i < files.length; i++)
            {
                const file = files[i];
                const fileName = file.name;

                let fileExtension = "";

                if (fileName.includes(".") == true)
                {
                    const splitName = fileName.split(".");
                    fileExtension = splitName[splitName.length - 1].toLowerCase();
                }
                else
                {
                    fileExtension = "";
                }

                let isAllowed = false;

                for (let j = 0; j < allowedTypes.length; j++)
                {
                    if (fileExtension === allowedTypes[j])
                    {
                        isAllowed = true;
                        break;
                    }
                }

                if (isAllowed == false)
                {
                    errMsg = errMsg + "File type not allowed: " + fileName + "\n";
                    // result = false;
                    errMsg = errMsg + "Allowed file types are: " + allowedTypes.join(", ") + "\n";
                }
            }
        }
    }


    //return results
    if (errMsg != "") {
        alert(errMsg);
        result = false;
    }
    return result;
}

window.addEventListener("load", () => {
    const form = document.getElementById("create_post_form");
    if (form) {
        form.addEventListener("submit", (event) => {
            if (!Validate()) event.preventDefault();
        });
    }
});