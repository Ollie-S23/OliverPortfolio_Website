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
