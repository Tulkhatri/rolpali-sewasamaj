<script setup>
import { ref, reactive, onMounted } from 'vue'
const defaultLanguage = ref('tr')

const languages = reactive([
{
    name: 'नेपाली',  // Name in Nepali script
    code: 'ne',  // Language code for Nepali
    flag: 'np',  // Nepali flag code
  },
  {
    name: 'ne',
    code: 'en',
    flag: 'us',
  },
])

onMounted(() => loadGoogleTranslateScript())

function loadGoogleTranslateScript() {
  const script = document.createElement('script')
  script.src =
    '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'
  script.async = true
  document.head.appendChild(script)

  window.googleTranslateElementInit = () => {
    new window.google.translate.TranslateElement(
      {
        pageLanguage: defaultLanguage.value,
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false,
      },
      'google_translate_element'
    )
  }
}
function changeLanguage(lang) {
  let googleTranslateComboBox = document.querySelector('.goog-te-combo')
  if (googleTranslateComboBox) {
    googleTranslateComboBox.value = lang
  }
  window.location = `#googtrans(${defaultLanguage.value}\|${lang})`
  location.reload()
}
</script>

<template>
  <ul class="list-unstyled flex space-x-3 justify-center items-center mr-2">
    <li v-for="language in languages" :key="language.code">
      <a
        :href="`#googtrans(${defaultLanguage}|${language.code})`"
        @click="changeLanguage(language.code)"
      >
        <img
          class="w-5"
          :src="`https://www.worldometers.info//img/flags/small/tn_${language.flag}-flag.gif`"
          :alt="language.name"
        />
      </a>
    </li>
  </ul>
</template>