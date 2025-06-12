import { StyleSheet } from 'react-native';

const styles = StyleSheet.create({
  container: { flex: 1, backgroundColor: '#f5f8ff', paddingTop: 40, paddingBottom: 2 },
  searchBarContainer: { flex: 1, backgroundColor: '#f5f8ff', paddingTop: 16, paddingBottom: 2 },
  header: {
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#295393',
    padding: 20,
    borderTopLeftRadius: 10,
    borderTopRightRadius: 10,
  },
  userName: { color: '#fff', fontWeight: 'bold', fontSize: 20 },
  searchContainer: {
    marginHorizontal: 16,
    marginBottom: 8,
    backgroundColor: '#fff',
    borderRadius: 10,
    paddingHorizontal: 12,
    paddingVertical: 6,
    elevation: 2,
  },
  searchInput: { height: 40, color: '#222' },
  grid: { paddingHorizontal: 16, paddingBottom: 16 },
  teacherCard: {
    flex: 1,
    alignItems: 'center',
    margin: 8,
    backgroundColor: '#fff',
    borderRadius: 16,
    padding: 16,
    elevation: 2,
  },
  teacherAvatar: {
    width: 80,
    height: 80,
    borderRadius: 40,
    marginBottom: 8,
    backgroundColor: '#e0e7ff',
  },
  teacherName: { fontWeight: 'bold', color: '#295393', fontSize: 16, textAlign: 'center', marginBottom: 0 },
  loadingContainer: { flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#f5f8ff' },
  loadingText: { marginTop: 8, fontSize: 16, color: '#6366F1' },
  noResults: { textAlign: 'center', color: '#888', marginTop: 32, fontSize: 16 },
});

export default styles;