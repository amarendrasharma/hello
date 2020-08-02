<template>
  <div>
    <form class="w-full max-w-sm" v-if="namePart==1" @submit.prevent="done(namePart)">
      <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
        <span class="typing">Hey Your Name Please?</span>
        <input
          class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
          type="text"
          v-model="name"
          placeholder="Jane Doe"
          aria-label="Full name"
        />
      </div>
    </form>

    <form class="w-full max-w-sm" v-if="namePart==2" @submit.prevent="done(namePart)">
      <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
        <span class="typing">May I know your Email Address.So I can reply you back .</span>
        <input
          class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
          type="email"
          v-model="email"
          placeholder="Jane Doe"
          aria-label="Full name"
        />
      </div>
    </form>

    <form class="w-full max-w-sm" v-if="namePart==3" @submit.prevent="done(namePart)">
      <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
        <span
          class="typing"
        >Would You like to talk to me ?Leave your message here. I am looking forward to hear from you</span>
        <input
          class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
          type="text"
          v-model="msg"
          placeholder="Jane Doe"
          aria-label="Full name"
        />
      </div>
    </form>

    <div v-if="namePart==3" class="getlost flex">
      <span class="typing">Would You like to talk to me ? I am looking forward to hear from you</span>
      <form @submit.prevent="done(namePart)">
        <input v-model="name" />
      </form>
    </div>

    <div v-if="namePart==4" class="getlost flex">
      <span class="typing">Thank you . Would you like to send me ? just Click bellow</span>
      <button @click.prevent="done(4)">sdsd</button>
    </div>
  </div>
</template>

<script>
function debounce(fn, delay = 300) {
  var timeout = null;
  return function () {
    const functionCall = () => fn.apply(this, arguments);
    clearTimeout(timeout);
    setTimeout(functionCall, delay);
  };
}
export default {
  data() {
    return {
      name: "",
      showAnim: true,
      msg: "",
      email: "",
      namePart: 1,
      kela: "kela",
      bal: "bal",
    };
  },
  computed: {
    name() {},
  },
  methods: {
    done(no) {
      let timer = null;
      clearTimeout(timer);
      timer = setTimeout(() => {
        if (this.namePart < 4) {
          this.namePart += 1;
        }
        if (this.namePart >= 4) {
          alert("gone");
        }
      }, 2000);
    },
  },
};
</script>

<style lang="scss">
.getlost {
  width: 100px;
  height: 100px;
  position: relative;
  animation: mymove 5s infinite;
  animation-iteration-count: 1;
}

@keyframes mymove {
  from {
    right: 100%;
    opacity: 0;
  }
  to {
    right: 0%;
    opacity: 1;
  }
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

.typing {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 auto;
  animation: typing 10s infinite;
}

input {
  outline: 0;
  border-width: 0 0 2px;
  border-color: blue;
}
input:focus {
  border-color: green;
}
</style>