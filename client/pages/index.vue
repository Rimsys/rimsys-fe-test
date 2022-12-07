<template>
  <div class="flex justify-center flex-col p-2 lg:p-8">
    <div class="m-8 flex justify-center">
      <Logo />
    </div>
    <ul
      v-if="users && users.length === 0"
      class="grid grid-cols-1 gap-6 bg-gray-100 rounded p-8 w-full sm:grid-cols-2 lg:grid-cols-3"
    >
      <contact-card-skeleton
        v-for="i in 9"
        :key="`skel-${i}`"
      />
    </ul>
    <ul
      v-if="users && users.length > 0"
      class="grid grid-cols-1 gap-6 bg-gray-100 rounded p-8 w-full sm:grid-cols-2 lg:grid-cols-3"
    >
      <contact-card
        v-for="(user, index) in users"
        :key="index"
        :user="user"
      />
    </ul>

    <div class="text-center mt-4">
      <span>Backend API Example</span>
      <span>&nbsp;</span>
      <a
        class="text-blue-400"
        :href="`${$config.apiUrl}/example?count=9`"
      >
        /example
      </a>
      <span>&nbsp;</span>
      <span class="text-gray-400 text-sm">(2 second delay)</span>
    </div>

    <div class="text-center mx-auto mt-4">
      <span class="mr-4">Kitchen Sink Components:</span>
      <div class="mt-2 flex mx-auto">
        <n-link to="/modal">
          <push-button theme="whiteLeft" class="-mr-px">
            Modal
          </push-button>
        </n-link>
        <n-link to="/toast">
          <push-button theme="whiteMid">
            Toasts
          </push-button>
        </n-link>
        <n-link to="/button">
          <push-button theme="whiteMid">
            Buttons
          </push-button>
        </n-link>
        <n-link to="/icon">
          <push-button theme="whiteRight">
            Icons
          </push-button>
        </n-link>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import {
  defineComponent,
  onMounted,
  useContext,
  ref,
} from '@nuxtjs/composition-api'
import { Users } from '@/types/api'

export default defineComponent({
  setup () {
    const { $axios } = useContext()
    const users = ref<Users>([])
    const count = ref(9)

    onMounted(() => get())

    async function get (): Promise<void> {
      users.value = (
        await $axios.get('example', { params: { count: count.value } })
      ).data.data as Users
    }

    return {
      // data
      users,
      count,

      // functions
      get,
    }
  },
})
</script>
