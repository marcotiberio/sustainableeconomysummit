import{b as d}from"./helpers-0bb72b7a.js";function r(t){const e=d(t,!1,{iframe:"iframe"});e.playButton.addEventListener("click",a,{once:!0});function a(){e.iframe.addEventListener("load",i,{once:!0}),e.iframe.setAttribute("src",e.iframe.getAttribute("data-src")),e.videoPlayer.dataset.state="isLoading"}function i(){e.videoPlayer.dataset.state="isLoaded",e.posterImage.dataset.state="isHidden"}}export{r as default};