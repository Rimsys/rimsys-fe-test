
export interface MetApiResponse {
  benchmark: number
  status: 'success' | 'failure'
  query: {
    options: Record<string, any>
    params: Record<string, any>
  }
  paginate?: {
    current_page: number
    first_item: number
    last_item: number
    last_page: number
    pages: Array<number>
    per_page: number
    total: number
  }
  data: any
}

export interface User {
  name: string
  job: string
  email: string
  phone: string
  avatar: string
}

export type Users = Array<User>

export interface Resume {
  id: number,
  user: User,
  name: string,
  email: string,
  location: string,
  job_title: string,
  portfolio_url: string,
  phone: string,
  about_me: string,
  experiences: Experiences
}

export type Resumes = Array<Resume>

export interface Experience {
  id: number,
  resume_id: number,
  resume: Resume,
  job_title: string,
  start_date: string,
  end_date: string,
  is_present: boolean,
  description: string,
}

export type Experiences = Array<Experience>
