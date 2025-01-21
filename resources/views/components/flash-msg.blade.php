@props(['msg'])

<div id="flash-message" class="fixed bottom-10 right-10 z-[60] animate-slide-in">
  <p class="w-[350px] h-auto py-3 px-5 text-center bg-green-600 rounded text-white font-semibold">
    {{ $msg }}
  </p>
</div>

<style>
  @keyframes slideIn {
    from {
      transform: translateX(100%);
      opacity: 0;
    }

    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @keyframes slideOut {
    from {
      transform: translateX(0);
      opacity: 1;
    }

    to {
      transform: translateX(100%);
      opacity: 0;
    }
  }

  .animate-slide-in {
    animation: slideIn 0.5s ease-out forwards;
  }

  .animate-slide-out {
    animation: slideOut 0.5s ease-in forwards;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const flashMessage = document.getElementById('flash-message');
    if (flashMessage) {
      setTimeout(() => {
        flashMessage.classList.remove('animate-slide-in');
        flashMessage.classList.add('animate-slide-out');
        setTimeout(() => flashMessage.remove(), 800); // Remove after animation ends
      }, 3500);
    }
  });
</script>